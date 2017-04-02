container:
	docker run -i --rm -v "$(PWD)":/root -t cs50/cli

docs: clean
	bundle install
	bundle exec jekyll build -V

clean:
	rm -rf css docs
