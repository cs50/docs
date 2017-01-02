default: container

image:
	docker build -t docs .

container: image
	docker run -i --name cli50 --rm -v "$(PWD)":/root -t docs

docs:
	jekyll build --incremental -V

clean:
	rm -rf css docs
