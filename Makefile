.PHONY: all
all: docs

.PHONY: depends
depends:
	gem install --user-install bundler
	bundle install --path ~/.gem

.PHONY: docs
docs: clean depends
	# removing bundle exec may cause command to fail
	bundle exec jekyll build -V --incremental

.PHONY: clean
clean:
	rm -rf _site
