// Adicionar um evento de rolagem para a janela
window.addEventListener('scroll', function() {
  // Obter a posição atual da rolagem da janela
  let scrollPosition = window.scrollY;

  // Mover a imagem de fundo com uma velocidade menor que a do conteúdo
  document.querySelector('.parallax-bg').style.transform = 'translateY(' + scrollPosition * 0.4 + 'px)';
});