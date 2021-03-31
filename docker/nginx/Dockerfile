FROM nginx:1.17.8-alpine

COPY docker/nginx/nginx.conf  /etc/nginx/
COPY docker/nginx/default.conf /etc/nginx/conf.d/
RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

<<<<<<< HEAD
EXPOSE 8080
=======
EXPOSE 80
>>>>>>> 5e5634dc7c9010d7af7eb1df9a84f7d85e8652b6
EXPOSE 443
