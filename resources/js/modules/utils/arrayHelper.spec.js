import { transpose } from './arrayHelper'

const usersAndEmails = [
    ['alice', 'bob', 'charlie'],
    ['alice@gmail.com', 'bob@gmail.com', 'charlie@gmail.com'],
    [23, 32, 19],
    ['Amsterdam', 'Berlin', 'Chicago'],
]

const expected = [
    ['alice', 'alice@gmail.com', 23, 'Amsterdam'],
    ['bob', 'bob@gmail.com', 32, 'Berlin'],
    ['charlie', 'charlie@gmail.com', 19, 'Chicago']
]

describe('utils/arrayHelper', () => {
    describe('.transpose(usersAndEmails)', () => {
        it('returns transposed list', () => {
            assert.deepEqual(transpose(usersAndEmails), expected)
        })
    })
})
