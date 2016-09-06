FROM cs50/cli

# jekyll-asciidoc
RUN apt-get update && \
    apt-add-repository -y ppa:brightbox/ruby-ng && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y ruby2.3 ruby2.3-dev

# https://github.com/asciidoctor/jekyll-asciidoc/issues/135#issuecomment-241948040
# https://github.com/asciidoctor/jekyll-asciidoc#development
COPY Gemfile /root
WORKDIR /root
RUN gem install bundler
RUN bundle install

RUN echo "This is CS50 CLI with Jekyll." > /etc/motd
