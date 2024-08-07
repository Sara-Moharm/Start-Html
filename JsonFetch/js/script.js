//1 function => get posts $ Fetch Url

async function getPosts() {
  //Url In Varaible step(1)

  try {
    let url = "https://jsonplaceholder.typicode.com/posts";
    //check Url Using Fetch
    const respone = await fetch(url),
      // data => Respone => Json
      data = await respone.json();
    return data;
  } catch (error) {
    console.log(error);
  }
}

// display Post In Card
/**
 *  // 1) Reach The Parent Div For Append The Posts Into It
    //2) for of loop into the associative array 
   //3) To Solve The Override We Should Redeclare The Same Variables For Each Object In the Array
   //4) Using The Dot Notation To Access The Properties
*/
let rowDiv = document.getElementsByClassName("row")[0];

getPosts().then((data) => {
  for (let post of data) {
    let card = document.createElement("div");
    card.style = "border: 2px solid;";
    card.classList.add("col-lg-4", "col-md-6", "col-sm-12", "mt-1");

    let title = document.createElement("h2");
    title.innerHTML = post.title;

    let id = document.createElement("p");
    id.innerHTML = post.id;

    let bodyCard = document.createElement("p");
    bodyCard.innerHTML = post.body;

    card.appendChild(title);
    card.appendChild(id);
    card.appendChild(bodyCard);
    rowDiv.appendChild(card);
  }
});
