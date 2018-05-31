<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PostSearchBarcodeFromUrlRequest.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for postSearchBarcodeFromUrl" operation.
 */
class PostSearchBarcodeFromUrlRequest
{
    /*
     * Initializes a new instance of the PostSearchBarcodeFromUrlRequest class.
     *  
     * @param string $url The URL of document.
     * @param \GroupDocs\Signature\Model\SearchOptionsData $searchOptionsData Search Options
     * @param string $password Document password if required.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($url, $searchOptionsData = null, $password = null, $storage = null)             
    {
        $this->url = $url;
        $this->searchOptionsData = $searchOptionsData;
        $this->password = $password;
        $this->storage = $storage;
    }

    /*
     * The URL of document.
     */
    public $url;
	
    /*
     * Search Options
     */
    public $searchOptionsData;
	
    /*
     * Document password if required.
     */
    public $password;
	
    /*
     * The file storage which have to be used.
     */
    public $storage;
}