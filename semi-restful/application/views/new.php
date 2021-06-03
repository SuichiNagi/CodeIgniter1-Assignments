<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0px;
            margin: 0px;
            font-family: sans-serif;     
        }

        .container{
            width: 320px;
            margin: 10px auto;
        }

        h2{
            padding: 10px;
        }

        form{
            padding: 10px 10px 0px;
        }

        input[type='text'], textarea{
            width: 295px;
            border: 2px solid black;
            margin: 5px 0;
            padding: 5px;
        }

        input[type='submit']{
            display: block;
            margin: 15px 0 0;
            width: 80px;
            padding: 5px;
            border: 2px solid black;
            cursor: pointer;
        }

        p{
            padding: 5px;
        }

        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Add a new product</h2>
        <form action='/products/create' method='post'>
            <label>Name:</label>
            <label class='error'>
                <?php if($this->session->userdata('error')){
                    echo $this->session->userdata('error')['name'];
                }?>
            </label>
            
            <input type='text' name='name'>
            <label>Description:</label>
            <textarea name='description' rows='3' cols='35'></textarea> 
            <label>Price:</label>
            <label class='error'>
                <?php if($this->session->userdata('error')){
                    echo $this->session->userdata('error')['price'];
                }
                $this->session->set_userdata('error', array('name'=>'', 'price'=>''))?>
            </label>
            <input type='text' name='price'>
            <input type='submit' value='create'><br>
        </form>
        <p><a href='<?= base_url()?>products'>Go back</a></p>
    </div>
</body>
</html>