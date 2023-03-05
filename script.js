const accordion_items_elms = document.querySelectorAll('.accordion .accordion__item');

accordion_items_elms.forEach(accordionItem => {

  accordionItem.querySelector('.accordion__item__head').addEventListener('click', (e) => {
    accordionItem.classList.toggle('open');
  });

});
