FROM node:14.18.1-alpine
RUN mkdir -p /var/www/nuxt
# timezone
ARG TZ
WORKDIR /var/www/nuxt
COPY ./nuxt/ /var/www/nuxt/

RUN apk update && \
    apk upgrade && \
    apk add --no-cache make gcc g++ python2

EXPOSE 3000