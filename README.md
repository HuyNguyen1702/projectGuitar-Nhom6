### Overview
- GuitarStation là trang web bán nhạc cụ đàn guitar sử dụng các ngôn ngữ lập trình như HTML,CSS,JS,PHP.
- GitHub: 
```bash
 https://github.com/HwieNg/projectGuitar-Nhom6
```
- Demo: 
```bash
https://guitarstationnhom6.000webhostapp.com/
```

### Install

1) Cài đặt trên môi trường localhost

Bước 1: Cài đặt một số công cụ giả lập server miễn phí như : XAMPP, WAMP...

Bước 2: Sau khi cài đặt xong XAMPP, vào thư mục và tạo thư mục guitarStation
```bash
C:\xampp\htdocs\guitarStation
```
Bước 3: Vào thư mục mình vừa tạo,clone project guitar:
```bash
$ git clone git@github.com:HwieNg/projectGuitar-Nhom6.git
```
Bước 4: Sau khi clone project thành công, bật 2 mục sau trong XAMPP:
* Apache
* MySQL

Bước 5: Vào trang 
```bash
http://localhost/phpmyadmin/
```
* Tạo 1 cơ sở dữ liệu có tên: qlchguitar
* Import file: qlchguitar.sql 

Bước 6: Vào trình duyệt của bạn và vào đường link:
```bash
http://localhost/projectGuitar/
```
2) Deloy trang web

Có thể sử dụng một số công cụ, trang web deloy như :
* Heroku
* webhostapp

Cách cài đặt bạn có thể tham khảo một số hướng dẫn sau:

https://viblo.asia/p/trien-khai-web-tren-heroku-djeZ1RWglWz

https://codelearn.io/sharing/deploy-web-len-hosting-tao-web-tin-tuc-bang-php-phan-cuoi

### Demo
- Giao diện trang bán hàng

![giaodienUser](https://user-images.githubusercontent.com/72747007/144338307-4cae034a-b502-4c50-86a8-9316c61029a4.png)

- Màn hình đăng nhập

![login](https://user-images.githubusercontent.com/72747007/144338433-9b574868-c3bd-4239-a468-1e23c5c3fd99.png)

- Trang sản phẩm

![product](https://user-images.githubusercontent.com/72747007/144338593-3be471ae-4ae4-4f6d-bae3-c1322512b5ae.png)

- Trang chi tiết sản phẩm

![detail](https://user-images.githubusercontent.com/72747007/144338698-654b5630-dcb6-412b-97e8-0860e95cb567.png)

- Giỏ hàng

![cart](https://user-images.githubusercontent.com/72747007/144338787-9fcc1814-17b2-4a92-a4f1-a7554f8ea5af.png)

- Đặt hàng

![order](https://user-images.githubusercontent.com/72747007/144339346-246fd355-f271-495e-a774-ba27044220c2.png)

- Hóa đơn
![report](https://user-images.githubusercontent.com/72747007/144339435-224af788-c698-4c97-999d-0d5dcf4782e6.png)










