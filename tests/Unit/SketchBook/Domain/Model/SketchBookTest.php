<?php

namespace Tests\Unit\SketchBook\Domain\Model;

use OpenSketch\SketchBook\Domain\Model\Sketch;
use OpenSketch\SketchBook\Domain\Model\SketchBook;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class SketchBookTest extends TestCase
{
    public function testCreateSketchBook(): void
    {
        $id = Uuid::uuid4()->toString();
        $sketches = [
            new Sketch(1, 'data:,')
        ];
        $sketchBook = new SketchBook(
            $id,
            '/test.json',
            $sketches,
            '#ffff00'
        );

        $this->assertSame([
            'id' => $id,
            'storage_path' => '/test.json',
            'sketches' => $sketches,
            'background' => '#ffff00'
        ], $sketchBook->jsonSerialize());
    }

    public function testCreateSketchBookWithoutSketches(): void
    {
        $id = Uuid::uuid4()->toString();
        $sketchBook = new SketchBook(
            $id,
            '/test.json',
            []
        );

        $this->assertCount(1, $sketchBook->sketches());
        $this->assertSame('#ffffff', $sketchBook->background());
        foreach ($sketchBook->sketches() as $sketch) {
            $this->assertSame(1, $sketch->id);
            $this->assertSame('data:,', $sketch->image);
        }
    }
}
