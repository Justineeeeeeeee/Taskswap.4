<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Post Task</title>
  
  @include('postTask.importscss')
</head>

<body>

  @include('postTask.headerPostTask')

<main style="margin-top: 3%;">


    @include('postTask.contentPostTask')



    @include('postTask.cardPostTask')
  

</main>

@include('postTask.footerPostTask')

@include('postTask.importsjs')



</body>

</html>