brew install php@8.0
brew link --force php@8.0
brew services start php@8.0
export PATH="/usr/local/opt/php@8.0/bin:$PATH"
export PATH="/usr/local/opt/php@8.0/sbin:$PATH"