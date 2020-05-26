import hljs from 'highlight.js/lib/core';
import javascript from 'highlight.js/lib/languages/javascript';
import yaml from 'highlight.js/lib/languages/yaml';
import php from 'highlight.js/lib/languages/php';
import json from 'highlight.js/lib/languages/json';

hljs.registerLanguage('javascript', javascript);
hljs.registerLanguage('yaml', yaml);
hljs.registerLanguage('php', php);
hljs.registerLanguage('json', json);


hljs.initHighlightingOnLoad();