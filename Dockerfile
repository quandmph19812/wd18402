# Sử dụng một image cơ sở
FROM ubuntu:latest

# Thiết lập môi trường làm việc
ENV LANG C.UTF-8

# Cài đặt các gói phần mềm cần thiết
RUN apt-get update && apt-get install -y \
    nginx \
    php \
    && rm -rf /var/lib/apt/lists/*

# Thiết lập cấu hình hoặc copy tệp cần thiết vào container

# Mở cổng mạng
EXPOSE 80

# Lệnh để chạy ứng dụng khi container được khởi chạy
CMD ["nginx", "-g", "daemon off;"]
