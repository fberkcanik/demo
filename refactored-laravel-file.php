use Illuminate\Http\Request;

public function createPost(Request $request)
{
    $title = $request->input('title');
    $author_id = $request->input('author_id');
    $content = $request->input('content')
    $categoryId = $request->input("categoryId");

    $existingPosts = BlogPost::all();
    foreach($existingPosts as $existing_post){
      // if we add author id for check, it will allow only 1 post entry for each author.
         if($existing_post->title == $title){
            echo "Title already exists";
            exit;
         }
    }
    $post = new BlogPost;
    $post->title = $title;
    $post->content = $content;
    $post->status = "published";
    $post->category_id => $categoryId
    $post->save();

   

    // must be added by Model. 

    return "Post created successfully!";
}
