all: clean depends docs

depends:
	gem install bundler
	bundle install

docs:
	# removing bundle exec may cause command to fail
	bundle exec jekyll build -V --incremental

clean:
	rm -rf _site
