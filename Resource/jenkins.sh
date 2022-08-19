
#!/bin/bash
echo "Adding apt-keys"
wget -q -O - https://pkg.jenkins.io/debian/jenkins-ci.org.key | sudo apt-key add -
echo deb http://pkg.jenkins.io/debian-stable binary/ | sudo tee /etc/apt/sources.list.d/jenkins.list

echo "Updating apt-get"
sudo apt-get -qq update

echo "Installing default-java"
sudo apt-get -y install default-jre > /dev/null 2>&1
sudo apt-get -y install default-jdk > /dev/null 2>&1

echo "Installing packages"
sudo apt-get -y install git > /dev/null 2>&1
sudo apt-get -y install python-pip > /dev/null 2>&1
sudo apt-get -y install phpunit > /dev/null 2>&1
sudo apt-get -y install php-mysql > /dev/null 2>&1
sudo apt-get -y install php-xdebug > /dev/null 2>&1
sudo apt-get -y install php-mbstring > /dev/null 2>&1

echo "Installing Selenium"
export LC_ALL=C
sudo pip install selenium 

echo "Installing jenkins"
sudo apt-get -y install jenkins > /dev/null 2>&1
sudo service jenkins start

sleep 1m

echo "Getting temp admin password"
JENKINSPWD=$(sudo cat /var/lib/jenkins/secrets/initialAdminPassword)
echo "JENKINSTEMPPWD: $JENKINSPWD"