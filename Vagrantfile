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

    SHELL
  end
end
