FROM cs50/cli

# jekyll-asciidoc
RUN apt-add-repository -y ppa:brightbox/ruby-ng && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y ruby2.3 ruby2.3-dev
#RUN gem install jekyll-asciidoc pygments.rb

# https://github.com/asciidoctor/jekyll-asciidoc/issues/135#issuecomment-241948040
# https://github.com/asciidoctor/jekyll-asciidoc#development
RUN git clone https://github.com/asciidoctor/jekyll-asciidoc && \
    cd jekyll-asciidoc && \
    gem install bundler jekyll && \
    bundle --path=.bundle/gems && \
    bundle exec rake build && \
    gem install pkg/jekyll-asciidoc-*.dev.gem pygments.rb

RUN echo "This is CS50 CLI with Jekyll." > /etc/motd
