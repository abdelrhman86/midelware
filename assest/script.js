function api(data) {
  data.forEach(element => {
    let divone = document.createElement("div");
    let div = document.createElement("div");
    let h1 = document.createElement("h1");
    let h2 = document.createElement("h2");
    let h3 = document.createElement("h3");
    let h4 = document.createElement("h4");
  
    let h1Text = document.createTextNode(element.id);
    let h2Text = document.createTextNode(element.mony);
    let h3Text = document.createTextNode(element.description);
    let h4Text = document.createTextNode(element.GBA);
  
    h1.appendChild(h1Text);
    h2.appendChild(h2Text);
    h3.appendChild(h3Text);
    h4.appendChild(h4Text);
    div.appendChild(h1);
    div.appendChild(h2);
    div.appendChild(h3);
    div.appendChild(h4)
    divone.appendChild(div);
    document.body.appendChild(divone);
  });
}

  fetch("doner/api.php")
  .then((response) => response.json())
  .then((data) => {
    api(data)
    apie(data)
  });

  function apie(e) {
    for (let index = 0; index < e.length; index++) {
      console.log(e[index])
      
    }
    // let divone = document.createElement("div");
    // let div = document.createElement("div");
    // let h1 = document.createElement("h1");
    // let h2 = document.createElement("h2");
    // let h3 = document.createElement("h3");
    // let h4 = document.createElement("h4");
  
    // let h1Text = document.createTextNode(data.id);
    // let h2Text = document.createTextNode(data.mony);
    // let h3Text = document.createTextNode(data.description);
    // // let h4Text = document.createTextNode(data);
    // console.log(data.length);
    // h1.appendChild(h1Text);
    // h2.appendChild(h2Text);
    // h3.appendChild(h3Text);
    // // h4.appendChild(h4Text);
    // div.appendChild(h1);
    // div.appendChild(h2);
    // div.appendChild(h3);
    // divone.appendChild(div);
    // document.body.appendChild(divone);
  }
  