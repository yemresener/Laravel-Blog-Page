

## Introduction

Laravel ile geliştirilmiş bir kişisel blog sayfası. Proje ana sayfa, gönderi sayfaları, hakkında ve developer bölümlerinden oluşmaktadır. Database olarak MySQL tercih edilmiştir. 

Genel kullanıcının erişebildiği sayfalar;

### Home Page
![](githubImages/homePage.jpg)
Bütün kullancılar tarafından erişilebilir, gönderilerden oluşan sayfa. Kullanıcının dilediği gönderiyi arama fonksiyonu, gönderileri sıralama fonksiyonları vardır.

### Post Page
![](githubImages/Postlar.jpg)
Kullanıcı dostu bir gönderi sayfası düzenlenmiştir.

### About Page
![](githubImages/AboutPage.jpg)
Sayfa ve yöneticiler hakkında sunulan bilgilerin bulunduğu sayfa.

## Admin Pages

### Developer Login Page
![](githubImages/DeveloperLoginPage.jpg)
Giriş için gerekli boşlukların istenilen şekilde doldurulduktan sonra gerekli authentication işlemleri yapılmaktadır.


### Dashboard
![](githubImages/Dashboard.jpg)
Yetkili kişinin gönderi oluşturabildiği, gönderi istatistiklerini görebildiği ve tabi ki çıkış yapabildiği sayfadır.

### Create Post
![](githubImages/CreatePost.jpg)
İhtiyaç duyulan alanlar doldurultuktan sonra gönderi eklenilen bölüm.

### Update Post
![](githubImages/UpdatePost.jpg)
Gönderi de güncelleme yapmak için giriş yapıldıktan sonra home page de ekrana gelen düzenle butonları kullanılmaktadır;
![](githubImages/AdminLogin.jpg)
Güncelleme sırasında resim değiştirme esnasında güncel ve eski resim gösterilerek kullanıcı dostu olmaya bir adım daha atılmıştır.
![](githubImages/NewImageAndOldOne.jpg)


## In the Feature
1. **Kullanıcı (Admin Olmayan) Girişi**
   - Kullanıcıların kendi hesaplarını oluşturabilmesi.
   - Güvenli giriş yapabilmesi.

2. **Gönderilere Kullanıcı Yorumları Eklenmesi**
   - Kullanıcıların gönderiler altına yorum bırakabilmesi.
   - Admin onayı gerektiren bir yorum sistemi opsiyonu.
   - Nested comments (yorumlara yanıt verme) desteği.

3. **Kullanıcıların Kendi Blog Yazılarını Oluşturabilmesi**
   - Kullanıcılar için gönderi oluşturma ve düzenleme alanı.
   - Kullanıcı gönderilerinin admin onayından geçmesi.
   - Kullanıcı profil sayfasında, kendi yazılarını görüntüleme ve yönetme fonksiyonları.

---









