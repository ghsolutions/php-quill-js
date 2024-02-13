const fse = require('fs-extra');
const path = require('path');

const nodeModulesDir = path.join(__dirname, 'node_modules');
const publicDir = path.join(__dirname, 'js');

fse.emptyDirSync(path.join(publicDir, 'quill'));
fse.copySync(path.join(nodeModulesDir, 'quill', 'dist'), path.join(publicDir, 'quill'), { overwrite: true });

