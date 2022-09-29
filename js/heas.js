const phrases = ['Watch the watchers','Keep HE safe','Resist Spying','Proctorio = evil']

const phrase = phrases[Math.floor(Math.random()*phrases.length)]

JsBarcode("#barcode", phrase, {
  lineColor: "#000",
  width: 4,
  height: 350,
  displayValue: false
});

// const posts = 'https://aftersurveillance.net/wp-json/wp/v2/posts?per_page=30';

// fetch(posts) .then(response => response.json()).then(data => makeheasPosts(data));

// function makeheasPosts(data){
//   const destination = document.querySelector('#home-posts');  
//   data.forEach((element) => {
//      const title = element.title.rendered;
//     const link = element.link;
//      destination.innerHTML += `<div class='front-post'><a href="${link}"><h3>${title}</h3></a></div>`

//     //destination.appendChild("<h3>${element.title.rendered}</h3>");
//     console.log(element)
//   });
// }