default: container

image:
	docker build -t docs .

container:
	docker run -i --rm -v "$(PWD)":/root -t docs

docs: clean
	jekyll build -V

clean:
	rm -rf css docs
