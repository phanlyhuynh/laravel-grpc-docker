# Dockerfile-proto
FROM golang:1.15

ARG PROTOBUF_VERSION=3.14.0
ARG PHP_GRPC_VERSION=1.34.0

# Utils
RUN apt-get update
RUN apt-get install unzip
# Protobuf
RUN mkdir -p /protobuf
RUN cd /protobuf \
    && wget https://github.com/protocolbuffers/protobuf/releases/download/v${PROTOBUF_VERSION}/protoc-${PROTOBUF_VERSION}-linux-x86_64.zip -O protobuf.zip \
    && unzip protobuf.zip && rm protobuf.zip

# grpc PHP (generate client)
RUN apt-get install php php-dev php-pear phpunit zlib1g-dev -y
RUN pecl install grpc-${PHP_GRPC_VERSION}
RUN cd /protobuf && git clone -b v${PHP_GRPC_VERSION} https://github.com/grpc/grpc \
    && cd /protobuf/grpc && git submodule update --init
RUN apt-get install autoconf libtool automake build-essential -y
RUN cd /protobuf/grpc && make grpc_php_plugin

# RoadRunner's custom PHP gRPC plugin (server interface definition)
RUN apt-get install -y git
RUN git clone https://github.com/spiral/php-grpc.git
RUN cd php-grpc/cmd/rr-grpc && go install
RUN cd php-grpc/cmd/protoc-gen-php-grpc && go install

ENV PATH "/protobuf/bin:${PATH}"
