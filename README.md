# Personal Blog Project

## Introduction

Bu proje, **Laravel** ile geliştirilmiş bir kişisel blog sayfasıdır. Proje, **ana sayfa**, **gönderi sayfaları**, **hakkında** ve **admin** bölümlerinden oluşmaktadır. **MySQL** veritabanı kullanılarak geliştirilen bu blog, kullanıcı dostu ve fonksiyonel bir tasarıma sahiptir.

---

## Kullanıcıların Erişebildiği Sayfalar

### 1. **Home Page**
![](githubImages/homePage.jpg)

Ana sayfa, tüm kullanıcılar tarafından erişilebilir ve blog gönderilerinden oluşur. Kullanıcılar, gönderileri arama ve sıralama gibi fonksiyonlarla filtreleyebilir.

### 2. **Post Page**
![](githubImages/Postlar.jpg)

Gönderi sayfası, kullanıcı dostu bir arayüze sahiptir. Kullanıcılar, her gönderiye ait detaylı bilgiye kolayca erişebilirler.

### 3. **About Page**
![](githubImages/AboutPage.jpg)

Bu sayfa, proje hakkında bilgiler ve yöneticiler hakkında detaylı bilgiler sunar.

---

## Admin (Yönetici) Sayfaları

### 1. **Developer Login Page**
![](githubImages/DeveloperLoginPage.jpg)

Yönetici girişi için gerekli alanlar doldurulup doğrulama işlemleri yapılır. Güvenli bir şekilde admin girişi sağlanır.

### 2. **Dashboard**
![](githubImages/Dashboard.jpg)

Admin paneli, yöneticiye gönderi oluşturma, gönderi istatistiklerini görüntüleme ve çıkış yapma gibi fonksiyonlar sunar.

### 3. **Create Post**
![](githubImages/CreatePost.jpg)

Yeni gönderi oluşturulabilecek alan. Yönetici, gerekli alanları doldurarak yeni gönderileri oluşturabilir.

### 4. **Update Post**
![](githubImages/UpdatePost.jpg)

Gönderi güncelleme işlemleri için admin giriş yaptıktan sonra, ana sayfada beliren düzenle butonları kullanılabilir.

![](githubImages/AdminLogin.jpg)

Gönderi güncellenirken eski ve yeni resimlerin aynı anda gösterilmesi, kullanıcı dostu bir deneyim sunar.

![](githubImages/NewImageAndOldOne.jpg)

---

## Özellikler (In the Future)

1. **Kullanıcı (Admin Olmayan) Girişi**
   - Kullanıcılar, hesap oluşturabilir.
   - Güvenli giriş yapabilirler.

2. **Gönderilere Kullanıcı Yorumları Eklenmesi**
   - Kullanıcılar gönderiler altına yorum bırakabilir.
   - Admin onayı gerektiren bir yorum sistemi eklenebilir.
   - Yorumlara yanıt verme (nested comments) desteği eklenebilir.

3. **Kullanıcıların Kendi Blog Yazılarını Oluşturabilmesi**
   - Kullanıcılar, kendi gönderilerini oluşturabilir ve düzenleyebilir.
   - Kullanıcı gönderilerinin admin onayından geçmesi gerekecek.
   - Kullanıcılar, profil sayfalarında kendi yazılarını yönetebilirler.

---
