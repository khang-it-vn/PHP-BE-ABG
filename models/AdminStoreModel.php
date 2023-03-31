<?php

class AdminStoreModel extends DbContext
{

    public function saveImage()
    {
        if (isset($_POST['submit'])) {
            // Get the file data from the $_FILES variable
            $file_data = $_FILES['image'];
            $file_path = $file_data['tmp_name'];
            $file_name = $file_data['name'];

            // Create a new cURL resource
            $ch = curl_init();

            // Attach the file to the HTTP POST request
            $post_data = array(
                'image' => new CURLFile($file_path, '', $file_name),
            );
            curl_setopt($ch, CURLOPT_URL, E_UPLOAD_IMAGE);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

            // Execute the HTTP request and get the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

            // Check if there was an error
            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            } 
            // Close the cURL resource
            curl_close($ch);
            $response = json_decode($response);
            return  $response -> filename;
        }
    }
}
