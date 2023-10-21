import {SketchBook} from "../domain/model/SketchBook";
import {SketchBookRepository} from "../domain/SketchBookRepository";
import serviceContainer from "../services/ServiceContainer";


export const loadSketchBook = async (sketchBookId: string) => {
  const sketchBookRepository: SketchBookRepository = serviceContainer.get('sketchbook.repository');
  return await sketchBookRepository.get(sketchBookId);
}

export const saveSketchBook = async (sketchBook: SketchBook) => {
  const sketchBookRepository: SketchBookRepository = serviceContainer.get('sketchbook.repository');
  await sketchBookRepository.save(sketchBook);
}

export const downloadSketch = async (sketchBookId: string, sketchId: string) => {
  await fetch(
    '/api/sketch-books/' + sketchBookId + '/exports/' + sketchId,
    {
      method: 'POST',
      headers: {
        'content-type': 'application/json;charset=UTF-8',
      },
    }
  );
}

export const saveFile = async ()  => {
  await fetch('/api/sketch-books/save', {
    method: 'POST',
    headers: {
      'content-type': 'application/json;charset=UTF-8',
    },
  });
}

export const openFile = async () => {
  await fetch('/api/sketch-books/open', {
    method: 'POST',
    headers: {
      'content-type': 'application/json;charset=UTF-8',
    },
  });
}


