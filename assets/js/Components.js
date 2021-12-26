let anchorList = document.querySelectorAll(".card-component-fill")
for( let anchor of anchorList){
    // find cards
    let card = anchor.closest(".card");

    // add click event
    card.addEventListener('click', cardFill);
}
function cardFill(e){
    // 1. get destination href address
    let anchor = this.querySelector(".card-component-fill");
        let address = anchor.href;
        // 2. change location to that address
        // window.location = address; // window.location.assign( address )
}

//like products
let likeButtonIconList = document.querySelectorAll(".btn > .fa-heart");
for(let likeButtonIcon of likeButtonIconList)
	{
		//Card find
		let button = likeButtonIcon.closest(".btn");
		button.addEventListener('click' , like);
	}

function like(e)
{
	e.preventDefault();
	let icon = this.querySelector(".fa-heart");
	
	if(icon.classList.contains('far'))
		{
			icon.classList.add('fas');
			icon.classList.remove('far');
		}
	else
		{
			icon.classList.add('far');
			icon.classList.remove('fas');
		}
		
}


//bookmark products
let bookmarkButtonIconList = document.querySelectorAll(".btn > .fa-bookmark");
for(let bookmarkButtonIcon of bookmarkButtonIconList)
	{
		//Card find
		let button = bookmarkButtonIcon.closest(".btn");
		button.addEventListener('click' , bookmark);
	}

function bookmark(e)
{
	e.preventDefault();
	let icon = this.querySelector(".fa-bookmark");
	
	if(icon.classList.contains('far'))
		{
			icon.classList.add('fas');
			icon.classList.remove('far');
		}
	else
		{
			icon.classList.add('far');
			icon.classList.remove('fas');
		}
		
}