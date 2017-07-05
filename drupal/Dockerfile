FROM sitback/soe:php7.0
MAINTAINER Chinthaka Godawita <chin@sitback.com.au>

ENV BH_VERSION "1.0.0"

RUN DEBIAN_FRONTEND=noninteractive apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -yq \
    php7.0-mbstring php7.0-bcmath \
    && rm -rf /var/lib/apt/lists/*
