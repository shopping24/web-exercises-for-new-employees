import { getUserEmails } from './mailing'

const users = [
    { name: 'alice', email: 'alice@gmail.com' },
    { name: 'bob' },
    { name: 'charlie', email: 'charlie@gmail.com' },
    { email: 'dean@gmail.com' }
]


describe('mailingModule', () => {
    describe('.getUserEmailsDeclarative(users)', () => {
        it('returns list of emails', () => {
            const expected = ['alice@gmail.com', 'charlie@gmail.com', 'dean@gmail.com']
            assert.deepEqual(getUserEmails(users), expected)
        })
    })
})
