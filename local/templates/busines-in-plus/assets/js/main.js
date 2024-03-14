document.addEventListener("DOMContentLoaded", function () {
  var downloadBtn = document.querySelector('.download-brif');
  if (downloadBtn) {

    downloadBtn.addEventListener('click', function (event) {
      event.preventDefault();

      var url = '/upload/doc/brif.pdf'; // Путь к файлу на сервере
      var anchor = document.createElement('a');
      anchor.href = url;
      anchor.target = '_blank';
      anchor.download = 'brif.pdf'; // Имя файла при загрузке

      document.body.appendChild(anchor);
      anchor.click();
      document.body.removeChild(anchor);
    });
  }


  const opportunities = document.querySelectorAll('.opportunities-list-li');

  opportunities.forEach(function (opportunity) {
    opportunity.addEventListener('click', function () {
      opportunities.forEach(function (item) {
        item.classList.remove('active');
      });

      this.classList.add('active');
    });
  });


  // Находим кнопку "Выбрать файл"
  var fileButton = document.querySelector(".footer-form-file-but");
  // Находим скрытый инпут для выбора файла
  var fileInput = document.querySelector(".footer-form-file-input");
  // Добавляем обработчик события клика на кнопку
  fileButton.addEventListener("click", function () {
    // Нажимаем на скрытый инпут
    fileInput.click();
  });


  //модалки
  var modalWrapper = document.getElementById('modal-wrapper');
  var modalFeedback = document.getElementById('modal-modal-feedback');
  var modalFeedbackBreef = document.getElementById('modal-modal-feedback-breef');
  // Открываем модальное окно
  function openModalFeedBack() {
    modalWrapper.classList.remove('hidden');
    modalFeedback.classList.remove('hidden');
  }
  function openModalBreef() {
    modalFeedbackBreef.classList.remove('hidden')
    modalWrapper.classList.remove('hidden');
  }
  $('.but-modal-breef').click(function () {
    openModalBreef()
  })
  $('.auto-sistem-promo-button, .man-text-button, .opport-row-text-but').click(function () {
    openModalFeedBack()
  })

  // Закрываем модальное окно
  function closeModal() {
    modalWrapper.classList.add('hidden');
    modalFeedback.classList.add('hidden');
    modalFeedbackBreef.classList.add('hidden');
  }

  // Обработка события клика на затемненную область
  modalWrapper.addEventListener('click', function (event) {
    if (event.target === modalWrapper) {
      closeModal();
    }
  });


  var tabs = document.querySelectorAll('.why-tabs-tab');
  var contents = document.querySelectorAll('.why-content');

  tabs.forEach(function (tab, index) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (tab) {
        tab.classList.remove('active');
      });
      contents.forEach(function (content) {
        content.classList.remove('active');
      });
      this.classList.add('active');
      contents[index].classList.add('active');
    });
  });


  if (window.location.pathname === "/kontakty/") {
    // Находим блок .map-window и удаляем его
    $(".map-window").remove();
  }

  if (window.location.pathname === "/o-komnanii/nashi-klienty/") {
    // Находим блок .map-window и удаляем его
    $(".client-review-bg").remove();
  }


  $(document).on('click', '.load-more-items', function () {

    targetContainer = $('.events-page-row')
    if (!targetContainer.length) {
      targetContainer = $('.logos')
    }
    url = $('.load-more-items').attr('data-url');

    if (url !== undefined) {
      $.ajax({
        type: 'GET',
        url: $('.load-more-items').attr('data-url'),
        dataType: 'html',
        success: function (data) {
          console.log(targetContainer);
          console.log(data);
          $('.load-more-items').remove();

          elements = $(data).find('.events-page-row-l-block')
          if (!elements.length) {
            elements = $(data).find('.logos-block')
          }
          pagination = $(data).find('.load-more-items');

          targetContainer.append(elements);
          $('#pag').append(pagination);

        }
      });
    }



  });
  $('.tree-1 .lvl-1').click(function () {
    console.log(1)
    $(this).toggleClass('active');
    $(this).children('.tree-2').toggle();
  });

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 160
  });

//   $(document).ready(function(){
//     $('.search-form form').submit(function(e){
//         e.preventDefault(); // Предотвращаем стандартное поведение отправки формы
        
//         // Получаем данные формы
//         var formData = $(this).serialize();
        
//         // Отправляем AJAX-запрос
//         $.ajax({
//             type: 'GET', // Метод запроса (GET или POST)
//             url: '/o-komnanii/obuchenie/search/', // URL, куда отправляем запрос
//             data: formData, // Данные формы
//             success: function(response){
//                 // Обработка успешного ответа от сервера
//                 // Здесь можно обновить содержимое страницы с результатами поиска
//                 // Например, вывести результаты в какой-то блок на странице
//                 $('#search-results').html(response);
//             },
//             error: function(){
//                 // Обработка ошибки AJAX-запроса
//                 alert('Произошла ошибка при выполнении запроса');
//             }
//         });
//     });
// });


  // удаляю Возврат к списку из детальных страниц
  $('p a').each(function () {
    if ($(this).text().trim() === 'Возврат к списку') {
      $(this).parent('p').remove();
    }
  });
  $('.clients .swiper-button-prev, .clients .swiper-button-next').removeClass('swiper-button-lock');
});