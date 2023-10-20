
  // Tela do Animal

  const activeImage = document.querySelector(".product-image .active");
  const productImages = document.querySelectorAll(".image-list img");

  
  function changeImage(e) {
    activeImage.src = e.target.src;
  }
  
  function toggleNavigation(){
    this.nextElementSibling.classList.toggle('active');
  }
  
  productImages.forEach(image => image.addEventListener("click", changeImage));
  navItem.addEventListener('click', toggleNavigation);

  // Contato tela do cachorro

  function mostrarModal() {
    // Exibe o modal definindo o estilo "display" como "flex"
    document.getElementById('myModal').style.display = 'flex';
}

  function fecharModal() {
    // Fecha o modal definindo o estilo "display" como "none"
    document.getElementById('myModal').style.display = 'none';
}

// Nao sei

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

  // Apagar animal

  function confirmar(codanimal){
    if (confirm('Excluir Animal?')){
      location.href = 'excluir.php?codanimal=' + codanimal;
    }
  }


  // LoginADM

