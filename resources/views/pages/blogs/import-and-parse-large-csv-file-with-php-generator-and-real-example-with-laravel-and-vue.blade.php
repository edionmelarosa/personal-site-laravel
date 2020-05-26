<div class="introduction">
    <h1>How to import and parse large CSV file using a PHP generator with Actual implementation example using Laravel and VueJs.</h1>
    <p>There are a lot of articles about how to import and save data into database but no one shares about implementing PHP generator.</p>
    <p>That's why I decided to publish this article.</p>
    <p>If you have no idea what PHP generator is. See <a href="https://www.php.net/manual/en/language.generators.overview.php" target="_blank">PHP Manual</a>.</p>
    <p>I have created a function which you can find <a href="https://gist.github.com/edionmelarosa/46a0799e3f3618beeae1bda389f85ee5" target="_blank">here</a>.</p>
</div>

<div class="main-content mt-10">
    <h2>Using the function.</h2>
    <p>If you're using Laravel or your application uses <code>composer</code>. Save the file somewhere in your application. Then, autoload it from your <code>composer.json</code>.</p>
<pre>
<code class="json">
"autoload": {
    "files": [
        "path/to/functions.php"
    ]
}
</code>
</pre>

<p>Make sure to run <code>composer dumpautoload</code> to reload your autoloaded files.</p>

<h2 class="mt-10">How the function work</h2>

<pre>
<code lang="php">
/**
* Reads entire csv file into a generator
* 
* @param mixed $path 
* @param bool $skipFirstRow 
* @return Generator<int, (array|null|false)> 
* @throws Exception 
*/
function lazy_csv_file($path, $skipFirstRow=false)
{
    try {
        if ($handle = fopen($path, 'r')) {
            // skip first row
            if ($skipFirstRow) {
                fgetcsv($handle);
            }

            while (($line = fgetcsv($handle, 1000)) !== FALSE) {
                yield $line;
            }

            fclose($handle);
        }
    } catch (\Throwable $th) {
        throw new Exception($th);
    }
}
</code>
</pre>

<p>It accepts two <code>parameters</code>.</p>
<ul>
    <li><code>$path</code> - path to your file.</li>
    <li><code>$skipFirstRow</code> - skip first row(usually header text). default to <code>false</code>.</li>
</ul>
<p>Now, look at how it handle the data. Instead of putting it inside an array variable or processing directly, it <code>yield</code> and output.</p>
<p>This is very useful when parsing large datasets.</p>

<h2 class="my-10">Practical implementation using Laravel and Vue</h2>
<p>From your Vue component, you might have:</p>

<xmp class="hljs text-2xl">
<template>
    <label>Upload CSV File</label>
    <input 
        type="file" 
        class="form-control" 
        accept=".csv"
        id="keyword-file"
        ref="keywordFile"
        @change="fileChanged"
    >
    <button class="btn" @click.prevent="submit"></button>
</template>
</xmp>
<pre>
<code class="javascript">
export default {
    data(){
        return {
            file: null
        }
    },
    
    methods: {
        fileChanged(event) {
            this.file = event.target.files[0];
        },

        submit() {
            let formData = new FormData();

            formData.append('file', this.file ?? '');
            
            axios.post('path/of/your/route', formData);
        }
    }    
}
</code>
</pre>

<h2 class="mt-10">In your Controller, you might have</h2>

<pre>
<code class="php">
public function handleFileUpload(Request $request)
{
    $attributes = validator($request->all(), [
        'file' => ['required', 'mimes:csv,txt', 'max:10000']
    ])->validate();

    $file = $request->file;
    $path = $file->getRealPath(); 

    foreach (lazy_csv_file($path, true) as $line) {
        // Handle you data here...
    }
}
</code>
</pre>
</div>