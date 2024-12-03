Vagrant.configure("2") do |config|

  # Máquina: Debian
  config.vm.define "hosting" do |hosting|
    hosting.vm.box = "debian/bookworm64"
    hosting.vm.hostname = "hosting.sistema.test"
    hosting.vm.network "private_network", ip: "192.168.57.102"
    
    hosting.vm.synced_folder ".", "/var/www/html"
    
    hosting.vm.provision "shell", inline: <<-SHELL
      sudo apt update
      sudo apt install -y apache2
      sudo systemctl enable apache2
      sudo systemctl start apache2

      sudo chown www-data:www-data /var/www/html/index.html
      sudo chmod 644 /var/www/html/index.html

      sudo nano /etc/apache2/sites-available/000-default.conf
      sudo nano /var/www/html/.htaccess
      ErrorDocument 404 /errores/404.html
      sudo mkdir -p /var/www/html/errores
      sudo nano /var/www/html/errores/404.html

      mkdir -p /vagrant/admin/
      mkdir -p /vagrant/status

      echo  /vagrant/admin/index.html
      echo  /vagrant/status/index.html
      echo  /vagrant/status/404.html

      sudo chown -R www-data:www-data /var/www/html/admin
      sudo chmod -R 755 /var/www/html/admin
      sudo systemctl restart apache2

      sudo a2enmod auth_basic
      sudo a2enmod authz_core

    SHELL
  end
end
