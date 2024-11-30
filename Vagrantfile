Vagrant.configure("2") do |config|

  # Máquina: Debian
  config.vm.define "hosting" do |hosting|
    hosting.vm.box = "debian/bookworm64"
    hosting.vm.hostname = "hosting.sistema.test"
    hosting.vm.network "private_network", ip: "192.168.57.102"
  end
end
