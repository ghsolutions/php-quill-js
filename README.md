# php-quill-js
PHP Wrapper to easy implement Quill JS in your PHP app

### Install required sources

```
npm init
npm install package.json
```

### Move downloaded sources to JS directory

```
node ./postinstall.js
```

In order to be able to support text area fields with Quill, the JavaScript file 'quill-textarea.js' must also be installed from 

```
https://github.com/tangien/quilljs-textarea?cmdf=quill-textarea.js
```

and deployed to the directiory for JavaScript-files **js**

Now we can implement the quill editor with few handles.
