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
                        echo ' <li><a href="#" class="changeContentLink" data-id="'.$id_categories.'">'.$name_categories.'</a></li>';
                  }
         ?>
      </ul>

      <div class="filters-content" id="content">
      <!-- phần ajax thay đổi  -->
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>
  <script>
        // Hàm xử lý khi thay đổi nội dung và hiển thị giá trị id
        function changeContent(dynamicId) {
            // Gửi thêm biến 'id'
            var dataToSend = { id: dynamicId };

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

        // Sự kiện click trên tất cả các thẻ a có class 'changeContentLink'
        $('.changeContentLink').click(function(event) {
            // Ngăn chặn hành vi mặc định của sự kiện click
            event.preventDefault();

            // Lấy giá trị 'id' từ thuộc tính 'data-id' của thẻ a
            var dynamicId = $(this).data('id');
            // Gọi hàm để thay đổi nội dung và hiển thị giá trị id
            changeContent(dynamicId);
        });

        // Tự động kích hoạt sự kiện click cho thẻ a đầu tiên khi trang được tải
        $(document).ready(function() {
            // Lấy giá trị 'id' của thẻ a đầu tiên
            var initialId = $('.changeContentLink:first').data('id');

            // Gọi hàm để thay đổi nội dung và hiển thị giá trị id
            changeContent(initialId);
        });
    </script>