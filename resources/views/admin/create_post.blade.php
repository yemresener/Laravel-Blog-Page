<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create_post.css') }}">
    <title>Document</title>
</head>
<body>
    <form class="form" action="{{route('create_post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
            
        <label for="">Category</label><p></p>
        <select name="category_id">
            @foreach ($categories as $c)
            <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select><p></p>

        <!-- Main Image -->
        <p>
            <label for="home_image">Main Image</label><p></p>
            <input type="file" name="home_image" id="home_image" accept="image/*">
            <div class="home_image" id="imagePreviewContainer" style="display: none;">
                <h3>Yüklenen Resim:</h3>
                <img id="imagePreview" src="#" alt="Resim Önizlemesi" style="max-width: 300px; max-height: 200px;">
            </div>
            
        </p><br>

        <!-- Main Title -->
        <p>
            <label for="main_title">Main Title</label><br>
            <input class="Title" type="text" name="main_title" id="main_title" required>
        </p><br>

        <!-- Main Article -->
        <p>
            <label for="main_article">Main Article</label><br>
            <textarea name="main_article" rows="5" cols="50" required></textarea>
        </p><br>

        
        <p>
            <!-- 1. Alt Başlık ve Açıklama -->
            <div id="additional_content1" style="display: none;">
                <label for="low_title1">1. Low Title</label><p></p>
                <input class="Title" type="text" name="low_title1" id="low_title1" placeholder="Nullable"><br><br>
                <label for="low_article1">1. Low Article</label><p></p>
                <textarea name="low_article1" rows="5" cols="50" placeholder="Nullable"></textarea><br><br>
                
            </div>
            <button id="toggle_button1" type="button" onclick="toggleContent('additional_content1', 'toggle_button2', 'show'); showNextButton('toggle_button1', 'toggle_button2');">Daha Fazla</button>
        </p>
        
        <p>
            <!-- 2. Alt Başlık ve Açıklama -->
            <div id="additional_content2" style="display: none;">
                <label for="low_title2">2. Low Title</label><p></p>
                <input class="Title" type="text" name="low_title2" id="low_title2" placeholder="Nullable"><br><br>
                <label for="low_article2">2. Low Article</label><p></p>
                <textarea name="low_article2" rows="5" cols="50" placeholder="Nullable"></textarea><br><br>
                
            </div>
            <button id="toggle_button2" type="button" style="display: none;" onclick="toggleContent('additional_content2', 'toggle_button3', 'show'); showNextButton('toggle_button2', 'toggle_button3');">Daha Fazla</button>
        </p>
        
        <p>
            <!-- 3. Alt Başlık ve Açıklama -->
            <div id="additional_content3" style="display: none;">
                <label for="low_title3">3. Low Title</label><p></p>
                <input class="Title" type="text" name="low_title3" id="low_title3" placeholder="Nullable"><br><br>
                <label for="low_article3">3. Low Article</label><p></p>
                <textarea name="low_article3" rows="5" cols="50" placeholder="Nullable"></textarea><br><br>
                
            </div>
            <button id="toggle_button3" type="button" style="display: none;" onclick="toggleContent('additional_content3', 'toggle_button4', 'show'); showNextButton('toggle_button3', 'toggle_button4');">Daha Fazla</button>
        </p>
        
        <p>
            <!-- 4. Alt Başlık ve Açıklama -->
            <div id="additional_content4" style="display: none;">
                <label for="low_title4">4. Low Title</label><p></p>
                <input class="Title" type="text" name="low_title4" id="low_title4" placeholder="Nullable"><br><br>
                <label for="low_article4">4. Low Article</label><p></p>
                <textarea name="low_article4" rows="5" cols="50" placeholder="Nullable"></textarea><br><br>
                
            </div>
            <button id="toggle_button4" type="button" style="display: none;" onclick="toggleContent('additional_content4', '', 'show'); showNextButton('toggle_button4', '');">Daha Fazla</button>
        </p>
        

        <button type="submit">Postayı Gönder</button>
    </form>

    <script src="{{ asset('js/create_post.js') }}"></script>
</body>
</html>
