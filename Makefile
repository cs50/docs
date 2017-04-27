container:
	docker run -i --rm -v "$(PWD)":/root -t cs50/cli

depends:
	gem install bundler
	bundle install

docs: clean depends
	# removing bundle exec may cause command to fail
	bundle exec jekyll build -V

clean:
	rm -rf css docs
