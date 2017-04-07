container:
	docker run -i --rm -v "$(PWD)":/root -t cs50/cli

depends:
	bundle install

docs: clean
	bundle exec jekyll build -V

clean:
	rm -rf css docs
