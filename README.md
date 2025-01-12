# Open Sketch - Your Creative Canvas

![Open Sketch Logo](./storage/app/images/open-sketch-logo.png)

[![Check Coding Standards](https://github.com/kpicaza/open-sketch/actions/workflows/coding-standards.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/coding-standards.yml)
[![PHPUnit tests](https://github.com/kpicaza/open-sketch/actions/workflows/phpunit.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/phpunit.yml)
[![Static Analysis by PHPStan](https://github.com/kpicaza/open-sketch/actions/workflows/phpstan.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/phpstan.yml)
[![Mutation tests](https://github.com/kpicaza/open-sketch/actions/workflows/mutation-tests.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/mutation-tests.yml)
[![TypeScript Lint](https://github.com/kpicaza/open-sketch/actions/workflows/ts-lint.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/ts-lint.yml)
[![TypeScript tests](https://github.com/kpicaza/open-sketch/actions/workflows/ts-test.yml/badge.svg)](https://github.com/kpicaza/open-sketch/actions/workflows/ts-test.yml)

## Table of Contents

* [Introduction](#Introduction)
* [Features](#Features)
* [Getting Started](#Getting-Started)
  * [Prerequisites](#Prerequisites)
  * [Installation](#Installation)
* [Usage](#Usage)
* [Contributing](#Contributing)
* [License](#License)

## Introduction

Welcome to Open Sketch! This is a versatile and user-friendly sketching application that empowers you to explore your 
creativity on a digital canvas. Whether you're an artist, designer, or just looking to express yourself, Open Sketch 
provides the tools you need.

![App Screenshot](./storage/app/images/app-screenshot.png)

## Features

> 🚧 We are at early development stage, every contribution of every type will be welcome and properly attributed.

### Sketch Book Manager

* [x] Multi-Language
* [x] Open New Sketch Books
* [x] Open Existing Sketch Books
* [x] Portable Sketch Book format

### Painting Canvas

* [x] Static size painting canvas
* [x] Background Color (Experimental)
* [ ] Background Image

### Drawing Palette

* [x] "Pen" Brush
* [x] "Pencil" Brush
* [x] "Eraser" Brush
* [x] Brush Color
* [ ] Recent used brush color palette
* [x] Brush Size
* [ ] Store Drawing settings

### Sketch Book

* [x] Create Default Sketch Book
* [x] Add new Sketch to the Sketch Book
* [x] Remove Sketch from the Sketch Book
* [x] Add Sketch navigator inside Sketch Book

### Export Sketches

* [x] Add Export to PNG (Experimental)
* [ ] Add Export to PNG, WEBP, JPG..

### Edit Sketches

* [ ] Undo/Redo - CtrlOrCmd+Z

## Getting Started

### Prerequisites

Before you begin, ensure you have the following:

* **Operating System**: Open Sketch is compatible with Windows, macOS, and Linux.

* **Hardware**: A computer or tablet with a compatible input device (mouse, stylus, or touchpad) for drawing.

### Installation

* **Download**: Visit our [Release Page](https://github.com/kpicaza/open-sketch/releases) to download the latest 
version of Open Sketch for your platform.

* **Installation**: Follow the installation instructions for your operating system.

## Usage

* **Launch**: Open Sketch and create a new canvas or open an existing project.

* **Drawing**: Use the drawing tool to sketch, paint, and design to your heart's content.

* **Export**: When your masterpiece is ready, export it in your preferred format or share it with others.

For more detailed instructions and tips, check out our User Guide.

## Contributing

We welcome contributions from the community! Whether you're a developer, designer, or have ideas for improvements,
please see our Contribution Guidelines for details on how to get involved.

### Install project for development

#### Requirements

* PHP 8.2 or higher
* NODE v20.8 or higher
* Composer PHP package manager
* Yarn JS/TS package manager

#### Installation guide

Clone the project

```bash
git clone git@github.com:kpicaza/open-sketch.git
```

Install dependencies

```bash
cd open-sketch
composer install
yarn
```

Run app in development mode

```bash
yarn dev
```

Open another console

```bash
 php artisan native:serve
```

Run tests

```bash
composer check-all
```

## License

This project is licensed under the BSD-3-Clause License. You are free to use, modify, and distribute this software as long 
as you adhere to the terms of the license.
