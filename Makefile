proto_from_within_container:
	protoc /var/www/example.proto \
		--php_out=/var/www/php-client/src \
		$(: 👇 custom plugin from roadrunner to generate server interface) \
		--php-grpc_out=/var/www/php-client/src \
		$(: 👇 generates the client code) \
		--grpc_out=/var/www/php-client/src \
		--plugin=protoc-gen-grpc=/protobuf/grpc/bins/opt/grpc_php_plugin \
		--proto_path /var/www

proto:
	rm -rf php-client/src
	mkdir -p php-client/src
	docker-compose run proto make proto_from_within_container
