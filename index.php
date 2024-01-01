<!-- note back to end download img last img download only -->
<!DOCTYPE html >
  <html lang="en">
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Whole Converters</title>

          <style>
img {
    padding: 15px;
    border-radius: 20px;

  }
  select.form-select.selectbox {
    width: 90%;
    margin: auto;
}
.conbtn {
    width: 90%;
    margin: 1rem auto;
}
#dropzone {
      border: 2px dashed #ccc;
      padding: 20px;
      text-align: center;
      cursor: pointer;
    }
    #dropzone.highlight {
      background-color: #f7f7f7;
    }
    #result {
      margin-top: 20px;
    }
    body {
  font-family: Arial, sans-serif;

}

#dropzone {
   width: 100%;
    height: 200px;
    margin: 0 auto;
    border: 2px dashed #ccc;
    padding: 40px;
    text-align: center;
    cursor: pointer;
    margin-top: 3rem;
    border-radius: 10px;
    background: #E7E8D1;

}

#dropzone:hover
{
  background-color: #f7f7f7;
}

#dropzone.highlight {
  background-color: #f7f7f7;
}

#result {
  margin-top: 20px;
  font-weight: bold;
}


    #preview {
      margin-top: 10px;
      display: none;
    }

    #downloadBtn {
      display: none;
    }
    div#dropzone p {
    margin-bottom: 10px;
}
div#dropzone i svg {
    margin-top: 5px;
}
div#dropzone p svg{
    color: white;
    background: green;
    border-radius: 10px;
}

@media screen and (max-width:400px) {
  #dropzone {

    padding: 28px 40px;
  
  
}
    } 
    
    .card-body img {
      width: 2rem;
    border-radius: 3px;
    height: 2rem;
    padding: 3px;
    outline: inset;
}
.conone {
    display: flex;
    align-items: center;
    font-size: 13px;
    font-family: "Google Sans",Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
    width: 50%;

}
.card-body
{
  padding: 10px !important;
  display: flex;
    align-items: center;
}
.card {
    border-radius: 5px !important;
    margin-bottom: 1rem;
    background: #e7e8d1!important;
    /* background: linear-gradient(to right, #F05F57, #360940)!important; */
    color: white;
    border: none !important;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px !important;    

}

.imgname {
    margin: 0px;
    margin-left: 1rem;
    cursor: pointer;


}
.imgname:hover {
color:wheat;
text-decoration:underline;
    cursor: pointer;


}
select#convertExtension {
  width: 108px;
    height: 35px;
    font-size: 13px;
}
.conone .form-select:focus {
    border-color: var(--cui-form-select-focus-border-color,#998fed);
    outline: 0;
    box-shadow: 0 0 0 0 !important;
}

.contwo
{
  justify-content: space-between;
}
.contwo button
{
  width:10rem;
}

.contwo .btn:focus ,.contwo .btn:disabled{
    color: white;

}

</style>
        </head>
        <body>

          <div class="header">
            <?php include 'header.php';?>
          </div>

          <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="heads">
            <h4>Image Converter</h4>
          </div>
          <div class="body-con">
            <p>
            An image converter is a software tool or program that is used to convert images from one file format to another. It allows you to transform images from formats such as JPEG, PNG, BMP, GIF, or TIFF into different formats based on your needs.
            </p>
            <p>It's important to note that while image converters can change the file format, they do not improve the quality of an image. If an image is of low quality or resolution, converting it to a different format will not enhance its visual appearance.</p>
          </div>
        </div>
        </div>
      </div>


          <div class="body_sec">
            <div class="container">
              <div class="containers">
                <div class="head">
                  <h4>Image Converter</h4>
                  <hr>
                </div>

                <div id="dropzone">
                  <p>
                    Drag and drop an image file here or click to upload.</p>
                  <p>

                    Multiple Files Upload.</p>

                  <i><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" />
                  </svg></i>
                </div>
                <input type="file" id="fileInput" style="display: none;">
                  <div id="result"></div>


                  <!-- <div id="preview"></div> -->

              </div>
            </div>
          </div>

          <div class="blog_content">
        <div class="container">
        <div class="blogcontainers">
          <div class="body-con">
            <h4>Introduction</h4>
            <p>
            In today's digital age, images play a significant role in our lives. Whether it's for personal use or professional endeavors, the ability to manipulate and convert images to different formats is essential. Image converters are powerful tools that enable us to modify, resize, and convert images from one format to another, opening up a world of possibilities for creativity and efficiency. 
            </p>
            <p>In this comprehensive guide, we will explore the intricacies of image converters, delve into various conversion techniques, and discuss their practical applications in different domains.</p>
            <h4>JPEG (Joint Photographic Experts Group):</h4>
            <p>JPEG is one of the most popular image formats and is widely used for storing and sharing photographs. It uses a lossy compression algorithm, which means that it sacrifices some image quality to reduce file size. This compression technique makes JPEG ideal for digital photography, where large file sizes can be an issue. We will delve into the advantages of JPEG, discuss its limitations, and explore the optimal scenarios for using this format.</p>
            <h4>PNG (Portable Network Graphics):</h4>
            <p>PNG is a versatile image format that supports lossless compression, meaning that it retains all the image data without sacrificing quality. Unlike JPEG, PNG is suitable for graphics with sharp edges, transparent backgrounds, and limited colors. We will explore the features that make PNG a preferred choice for web graphics, logos, and images that require transparency. We will also discuss the potential drawbacks and provide insights into when to use PNG over other formats.</p>
            <h4>GIF (Graphics Interchange Format):</h4>
            <p>GIF is a unique image format known for its support of animations and low-resolution graphics. It uses a lossless compression algorithm that reduces file sizes, making it suitable for simple animations and small graphics on the web. We will dive into the history of GIF, explore its animation capabilities, discuss its limitations, and highlight the scenarios where GIFs shine.</p>
            <h4>BMP (Bitmap):</h4>
            <p>BMP is a basic image format that stores data pixel by pixel, without any compression. As a result, BMP files tend to be large and consume significant storage space. We will discuss the characteristics of BMP, its advantages in certain contexts, and its limitations compared to other formats. While BMP is not widely used in everyday scenarios, it has its niche applications, which we will explore.</p>
            <h4>TIFF (Tagged Image File Format):</h4>
            <p>TIFF is a high-quality image format commonly used in professional environments, such as photography, publishing, and printing. It supports both lossless and lossy compression, giving users the flexibility to choose between image quality and file size. We will delve into the features that make TIFF a preferred choice for professional use, discuss its compatibility, and highlight its typical applications.</p>
            <h4>EPS (Encapsulated PostScript):</h4>
            <p>EPS is a widely used vector graphics format that can contain both vector and bitmap elements. It is primarily used in professional environments for high-quality printing and publications. We will delve into the features and advantages of EPS, discuss its compatibility, and explore its applications in industries such as graphic design and printing.</p>
            <h4>ICNS (Apple Icon Image Format):</h4>
            <p>ICNS is an image format specific to Apple's macOS operating system. It is primarily used for creating icons for macOS applications. We will explore the features of ICNS, discuss its compatibility, and provide insights into creating and using ICNS files in the Apple ecosystem.</p>
            <h4>ICO (Icon):</h4>
            <p>ICO is a file format primarily used for icons in Windows-based systems. It can contain multiple image sizes and color depths to accommodate various display settings. We will discuss the characteristics of ICO files, their usage as application and folder icons, and explore methods for creating ICO files.</p>
             <h4>ODD (Open Document Drawing):</h4>
             <p>ODD is an image format used in open-source office suites such as LibreOffice and Apache OpenOffice. It is primarily employed for storing drawings and vector graphics. We will discuss the features of ODD, its compatibility with office suites, and its use cases in document creation and collaboration.</p>
             <h4>PS (PostScript):</h4>
             <p>PS is a page description language used in printing and document exchange. It can store both vector and bitmap images and is compatible with various platforms and printers. We will discuss the characteristics of PS files, their applications in professional printing, and their usage in creating high-quality graphics.</p>
             <h4>PSD (Photoshop Document):</h4>
             <p>PSD is Adobe Photoshop's native file format, allowing users to store layers, masks, and other editing information. It is the go-to format for graphic designers and photographers who require advanced image editing capabilities. We will explore the features of PSD, discuss its compatibility, and highlight its significance in the creative industry.</p>
             <h4>WEBP (Web Picture Format):</h4>
             <p>WEBP is a modern image format developed by Google that offers both lossy and lossless compression. It provides superior image quality at smaller file sizes compared to other formats. We will discuss the features of WEBP, its applications in web development, and its support across different browsers.</p>
             <h4>Conclusion:</h4>
             <p>
In conclusion, understanding the characteristics and applications of various image formats is crucial for choosing the right format for your specific needs. EPS, GIF, ICNS, ICO, JPG, ODD, PNG, PS, PSD, and WEBP are ten common image formats, each with its own strengths and ideal use cases. By familiarizing yourself with these formats, you can optimize your image usage and ensure compatibility across platforms and devices. So, the next time you work with images, consider the format that best suits your requirements and make the most out of your visual content.</p>
          </div>
        </div>
        </div>
      </div>


        </body>

        <script>
        let dropzone, fileInput, resultDiv, canvas, ctx, cardIndex = 0;

window.addEventListener('DOMContentLoaded', () => {
  dropzone = document.getElementById('dropzone');
  fileInput = document.getElementById('fileInput');
  resultDiv = document.getElementById('result');

  dropzone.addEventListener('click', () => {
    fileInput.click();
  });

  // Highlight drop zone on dragover
  dropzone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropzone.classList.add('highlight');
  });

  // Remove highlight on dragleave
  dropzone.addEventListener('dragleave', () => {
    dropzone.classList.remove('highlight');
  });

  // Handle file drop
  dropzone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropzone.classList.remove('highlight');

    const files = e.dataTransfer.files;
    handleFiles(files);
  });

  // Handle file selection using file input
  fileInput.addEventListener('change', (e) => {
    const files = e.target.files;
    handleFiles(files);
  });

  // Handle file processing
  function handleFiles(files) {
    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const reader = new FileReader();

      reader.onload = (e) => {
        const img = new Image();
        img.src = e.target.result;

        img.onload = () => {
          // canvas = document.createElement('canvas');
          // ctx = canvas.getContext('2d');
          // canvas.id = `canvas${cardIndex}`;
          // canvas.width = img.width;
          // canvas.height = img.height;
          // ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

          const cardDiv = createCard(cardIndex);
          const selectimg = document.createElement('img');
          selectimg.src = e.target.result;
          selectimg.id = `${cardIndex}`;
          selectimg.className = 'image';
          const selectBox = createSelectBox(cardIndex);
          const convertBtn = createConvertButton(cardIndex);

          cardDiv.appendChild(selectimg);
          cardDiv.appendChild(selectBox);
          cardDiv.appendChild(convertBtn);
          resultDiv.appendChild(cardDiv);
          cardDiv.focus();
          cardDiv.scrollIntoView({ behavior: 'smooth' });
          // Assign event listener to convert button
          convertBtn.addEventListener('click', () => convertedBtn(selectBox, event, selectimg));
          cardIndex++;
        };
      };

      reader.readAsDataURL(file);
    }
  }

  function createCard(cardIndex) {
    const cardDiv = document.createElement('div');
    cardDiv.className = `card`;
    cardDiv.id = `card${cardIndex}`;
    return cardDiv;
  }

  function createSelectBox(index) {
    const selectBox = document.createElement('select');
    selectBox.className = 'form-select selectbox';
    selectBox.id = `convertExtension${index}`;

    selectBox.onchange = (e) => selectbox(e, index);

    const emptyOption = document.createElement('option');
    emptyOption.value = '';
    emptyOption.text = 'Converter';
    selectBox.appendChild(emptyOption);

    const extensions = [
      'BMP',
      'EPS',
      'GIF',
      'ICNS',
      'ICO',
      'JPG',
      'ODD',
      'PNG',
      'PS',
      'PSD',
      'TIFF',
      'WEBP',
    ];

    extensions.forEach((extension) => {
      const option = document.createElement('option');
      option.value = extension;
      option.text = extension;
      selectBox.appendChild(option);
    });

    return selectBox;
  }

  function createConvertButton(index) {
    const convertBtn = document.createElement('button');
    convertBtn.type = 'button';
    convertBtn.className = 'btn btn-success conbtn';
    convertBtn.innerHTML = 'Convert';
    convertBtn.id = `convertBtn${index}`;
    convertBtn.disabled = true;

    return convertBtn;
  }
});

function selectbox(e, index) {
  const convertBtn = document.getElementById(`convertBtn${index}`);
  const selectedExtension = e.target.value;

  if (selectedExtension == '') {
    convertBtn.disabled = true;
  } else {
    const selectBoxes = document.getElementsByTagName(`select${index}`);
    for (let i = 0; i < selectBoxes.length; i++) {
      if (i !== index && selectBoxes[i].value == selectedExtension) {
        convertBtn.disabled = true;
        return;
      }
    }
    convertBtn.disabled = false;
  }
}

function convertedBtn(index, event, selectimg) {
  const selectedExtension = document.getElementById(`${index.id}`).value;

  const imageElements = document.getElementsByTagName('img')[selectimg.id];

  const convertBtn = document.getElementById(`${event.target.id}`);
  convertBtn.innerHTML =
    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Converting...';
  convertBtn.disabled = true;

  const convertedImages = [];
  const img = imageElements;

  canvas = document.createElement('canvas');
  ctx = canvas.getContext('2d');
  canvas.id = `canvas${cardIndex}`;
  canvas.width = img.naturalWidth;
  canvas.height = img.naturalHeight;
  ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
  const convertedImage = convertImage(canvas,selectedExtension);
  convertedImages[0] = convertedImage;
  setTimeout(() => {
    convertBtn.innerHTML = 'Convert';
    convertBtn.disabled = false;
    downloadImages(convertedImages, selectedExtension);
  }, 2000);
}

function downloadImages(dataURLs, extension) {

  const link = document.createElement('a');
  link.href = dataURLs;
  link.download = `converted_image.${extension.toLowerCase()}`;
  link.target = '_blank';

  link.click();
}

function convertImage(canvas, extension) {

  let mimeType = '';

  switch (extension.toLowerCase()) {
    case 'bmp':
      mimeType = 'image/bmp';
      break;
    case 'eps':
      mimeType = 'application/postscript';
      break;
    case 'gif':
      mimeType = 'image/gif';
      break;
    case 'icns':
      mimeType = 'image/icns';
      break;
    case 'ico':
      mimeType = 'image/vnd.microsoft.icon';
      break;
    case 'jpg':
    case 'jpeg':
      mimeType = 'image/jpeg';
      break;
    case 'odd':
      mimeType = 'application/vnd.oasis.opendocument.database';
      break;
    case 'png':
      mimeType = 'image/png';
      break;
    case 'ps':
      mimeType = 'application/postscript';
      break;
    case 'psd':
      mimeType = 'image/vnd.adobe.photoshop';
      break;
    case 'tiff':
      mimeType = 'image/tiff';
      break;
    case 'webp':
      mimeType = 'image/webp';
      break;
    default:
      console.error('Unsupported extension:', extension);
      return null;
  }
  return  canvas.toDataURL(mimeType);
}

        </script>
      </html>