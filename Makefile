.PHONY: all
all: docs

.PHONY: depends
depends:
	gem install bundler
	bundle install

.PHONY: docs
docs: clean depends
	# removing bundle exec may cause command to fail
	bundle exec jekyll build -V --incremental

.PHONY: clean
clean:
	rm -rf _site
