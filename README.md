# TodoList App


## Kurulum

Projeyi GitHub üzerinden klonlamak için terminale yazın;

>   git clone https://github.com/Odabasyusuf/todolistapp.git

Kendi local makinenizde **todolistapp** isminde database oluşuturun.

Proje ana dizinindeki **.env.example** dosyasını **.env** adı ile değiştirin.

.env dosya içeriğindeki,
>  DB_DATABASE=todolistapp  
DB_USERNAME=root  
DB_PASSWORD=

kısımlarını oluşturduğunuz veritabanına uygun şekilde doldurun.

Proje klasörü içerisindeki terminalden aşağıdaki komutları sırası ile çalıştırınız.
> composer install

> php artisan key:generate

> php artisan migrate --seed

> npm install && npm run dev

Son olarak,
>php artisan serve

Yazarak projeyi canlı inceleyebilirsiniz.
