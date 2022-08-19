FROM nginx:alpine

ADD nginx.conf /etc/nginx/
ADD app.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD ["nginx"]
