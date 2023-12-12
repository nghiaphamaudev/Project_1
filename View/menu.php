<section class="food_section layout_padding-bottom" style="margin-top:50px">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Thực Đơn Của Chúng Tôi
      </h2>
    </div>

    <ul class="filters_menu">

      <?php
      foreach ($list_categories as $value) {
        extract($value);
        echo ' <li><a href="#" class="changeContentLink" data-text="0" data-id="' . $id_categories . '">' . $name_categories . '</a></li>';
    
      }
      ?>
    </ul>
    
      <div class="d-flex flex-row gap-3 align-items-center">
        <div class="d-flex align-items-center">
          <i class="fa fa-heart-o"></i>
          <a href="#"class="changeContentLink result ms-1 fs-10" data-id="0" data-text="1">Giá từ Cao đến Thấp</a>
          <a href="#"class="changeContentLink result ms-1 fs-10" data-id="0" data-text="2" >Giá từ Thấp đến Cao</a>
        </div>
      <!-- <div class="d-flex flex-row">
          <a href="#"class="changeContentLink result ms-1 fs-10" data-id="0" data-text="2" >Giá từ Thấp đến Cao</a>
      </div> -->
    </div>
    <div class="filters-content" id="content">
      <!-- phần ajax thay đổi  -->
    </div>
    <div class="btn-box">
      <a href="">
        View More
      </a>
    
  </div>
</section>
<script>
  // Hàm xử lý khi thay đổi nội dung và hiển thị giá trị id
  function changeContent(dynamicId,dynamicText) {
    
 // Gửi thêm biến 'text' vÀ ID
 var dataToSend = { id: dynamicId, text: dynamicText };

    // Chuyển đối tượng thành chuỗi query string
    var queryString = $.param(dataToSend);
    
    // Sử dụng AJAX để lấy nội dung mới
    $.ajax({
      url: '../View/new-content.php?' + queryString, // Đường dẫn tới nguồn dữ liệu mới
      method: 'GET',
      success: function (data) {
        // Cập nhật nội dung của phần cần thay đổi
        $('#content').html(data);


      },
      error: function (error) {
        console.log('Error loading new content:', error);
      }
    });
  }




  // Lấy tất cả các thẻ <a> có class là "your-class-name"
  var linksWithClass = document.querySelectorAll('a.result');

  var linkWithClass1 = linksWithClass[0];

    var linkWithClass2 = linksWithClass[1];
  
  // Sự kiện click trên tất cả các thẻ a có class 'changeContentLink'
  $('.changeContentLink').click(function (event) {
    // Ngăn chặn hành vi mặc định của sự kiện click
    event.preventDefault();
    // Lấy giá trị 'id' từ thuộc tính 'data-id' của thẻ a

    var dynamicText = $(this).data('text');
    
    var dynamicId = $(this).data('id');



    linkWithClass1.setAttribute('data-id', dynamicId);
  

    linkWithClass2.setAttribute('data-id', dynamicId);



    // Gọi hàm để thay đổi nội dung và hiển thị giá trị id
    changeContent(dynamicId,dynamicText);
  });

  // Tự động kích hoạt sự kiện click cho thẻ a đầu tiên khi trang được tải
  $(document).ready(function () {
    // Lấy giá trị 'id' của thẻ a đầu tiên
    var initialId = $('.changeContentLink:first').data('id');

    // Gọi hàm để thay đổi nội dung và hiển thị giá trị id
    changeContent(initialId);
  });
</script>