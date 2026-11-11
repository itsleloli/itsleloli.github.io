import { defineCollection } from 'astro:content';
import { glob } from 'astro/loaders';
import { z } from 'astro/zod';

const work = defineCollection({
  loader: glob({ pattern: '*.md', base: './src/content/work' }),
  schema: z.object({
    order: z.number(),
    title: z.string(),
    summary: z.string(),
    problem: z.string(),
    role: z.string(),
    period: z.string(),
    status: z.string(),
    stack: z.array(z.string()),
    flow: z.array(
      z.object({
        color: z.enum(['yellow', 'orange', 'blue', 'pink']),
        text: z.string(),
      }),
    ),
  }),
});

export const collections = { work };
