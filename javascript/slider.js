var vargu = [
    "img/movie-1.jpg",
    "img/movie-2.jpg",
    "img/movie-3.jpg",
    "img/movie-4.jpg",
    "img/movie-5.jpg",
    "img/movie-6.jpg",
    "img/movie-7.jpg",
    "img/movie-8.jpg",
];

var index = 0;
//per me iteru duhet indexi si njava

const koha = 4000;
//moment kohor, matet me milisekonda


//deklarojim ni funksion per mi ndertu slajderin
//domi na jep mundesin me iu qas me egetElementById edhe .src nfunt mi bo
function krijoSlider(){
    document.getElementById('imazhi').src = vargu[index];
    index++; //duhet mu rujt per mes me ta kalu madhesin e vargut

    if(index == vargu.length){
        index = 0; //dmth nese indexi e ka mrri poziten e funit narrayn vargu kthe apet indexin n'0
    }

    setTimeout("krijoSlider()", koha); //qdo koh amount thirret method krijoSlideri()
}

krijoSlider();//heren e par e thirrim na herave tjera thirret vet!

// array e teksteve display ne slider
const text = [
  'Top Gun:Maverik',
  'Nope',
  'Black Panther 2',
  'The Batman',
  'The Northman',
  'The Pale Blue Eye',
  'Babylon'
];

let index2 = 0;

// function per mi bo update text ne slider
function updateText() {

  const textElement = document.getElementById('pershkrimi');
  
  textElement.innerHTML = text[index2];
  
  index2 = (index2 + 1) % text.length;

  if(index2 == vargu.length){
    index2 = 0; //dmth nese indexi e ka mrri poziten e funit narrayn vargu kthe apet indexin n'0
    }
}

setInterval(updateText, 4000);

const button = document.getElementById("watchTrailer");

const urls = [
  "https://youtu.be/giXco2jaZ_4",
  "https://youtu.be/In8fuzj3gck",
  "https://youtu.be/_Z3QKkl1WyM",
  "https://youtu.be/mqqft2x_Aa4",
  "https://youtu.be/oMSdFM12hOw",
  "https://youtu.be/ddbL9jvg77w",
  "https://youtu.be/5muQK7CuFtY"
];

let index3 = 0;

setInterval(() => {
  button.href = urls[index3];
  index3 = (index3 + 1) % urls.length;
}, 4000);

